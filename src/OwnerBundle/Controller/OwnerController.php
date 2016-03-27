<?php

namespace OwnerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use OwnerBundle\Entity\Owner;
use OwnerBundle\Form\OwnerType;
use Arcanedev\QrCode\QrCode;

/**
 * owner controller.
 *
 * @Route("/owner")
 */
class OwnerController extends Controller
{

    /**
     * Lists all owner entities.
     *
     * @Route("/", name="owner")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OwnerBundle:Owner')->findAll();
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $entities,
            $request->query->getInt('page', 1),
            3
        );

        return $this->render('Owner/index.html.twig', array('pagination' => $pagination));
    }
    /**
     * Creates a new owner entity.
     *
     * @Route("/", name="owner_create")
     * @Method("POST")
     * @Template("OwnerBundle:owner:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Owner();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('owner_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a owner entity.
     *
     * @param owner $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Owner $entity)
    {
        $form = $this->createForm(new OwnerType(), $entity, array(
            'action' => $this->generateUrl('owner_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create', 'attr' => array('class' => 'btn btn-primary')));

        return $form;
    }

    /**
     * Displays a form to create a new owner entity.
     *
     * @Route("/new", name="owner_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Owner();
        $form   = $this->createCreateForm($entity);

        return $this->render('Owner/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a owner entity.
     *
     * @Route("/{id}", name="owner_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OwnerBundle:Owner')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find owner entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('Owner/show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing owner entity.
     *
     * @Route("/{id}/edit", name="owner_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OwnerBundle:Owner')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find owner entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('Owner/edit.html.twig',  array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a owner entity.
    *
    * @param owner $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(owner $entity)
    {
        $form = $this->createForm(new OwnerType(), $entity, array(
            'action' => $this->generateUrl('owner_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update', 'attr' => array('class' => 'btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing owner entity.
     *
     * @Route("/{id}", name="owner_update")
     * @Method("PUT")
     * @Template("OwnerBundle:owner:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OwnerBundle:Owner')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find owner entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('owner_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a owner entity.
     *
     * @Route("/{id}", name="owner_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OwnerBundle:Owner')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find owner entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('owner'));
    }

    /**
     * Creates a form to delete a owner entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('owner_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete', 'attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
    
    /**
     * QRcode a owner entity.
     *
     * @Route("/", name="owner_qrcode")
     */
    public function generateQRCode()
    {
        $entity = new Owner();
        
        $qrCode = new QrCode;
        $qrCode->setText("I would love to change the world, but they won't give me the source code");
        $qrCode->setSize(200);

        echo $qrCode->image("image alt", ['class' => 'qr-code-img']);
    }
}
