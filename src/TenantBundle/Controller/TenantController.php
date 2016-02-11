<?php

namespace TenantBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use TenantBundle\Entity\Tenant;
use TenantBundle\Form\TenantType;

/**
 * Tenant controller.
 *
 * @Route("/tenant")
 */
class TenantController extends Controller
{

    /**
     * Lists all Tenant entities.
     *
     * @Route("/", name="tenant")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TenantBundle:Tenant')->findAll();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $entities,
            $request->query->getInt('page', 1),
            2
        );

        return $this->render('Tenant/index.html.twig', array('pagination' => $pagination));
    }
    /**
     * Creates a new Tenant entity.
     *
     * @Route("/", name="tenant_create")
     * @Method("POST")
     * @Template("TenantBundle:Tenant:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Tenant();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tenant_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Tenant entity.
     *
     * @param Tenant $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Tenant $entity)
    {
        $form = $this->createForm(new TenantType(), $entity, array(
            'action' => $this->generateUrl('tenant_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Tenant entity.
     *
     * @Route("/new", name="tenant_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Tenant();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Tenant entity.
     *
     * @Route("/{id}", name="tenant_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TenantBundle:Tenant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tenant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Tenant entity.
     *
     * @Route("/{id}/edit", name="tenant_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TenantBundle:Tenant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tenant entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Tenant entity.
    *
    * @param Tenant $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Tenant $entity)
    {
        $form = $this->createForm(new TenantType(), $entity, array(
            'action' => $this->generateUrl('tenant_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Tenant entity.
     *
     * @Route("/{id}", name="tenant_update")
     * @Method("PUT")
     * @Template("TenantBundle:Tenant:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TenantBundle:Tenant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tenant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tenant_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Tenant entity.
     *
     * @Route("/{id}", name="tenant_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TenantBundle:Tenant')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tenant entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tenant'));
    }

    /**
     * Creates a form to delete a Tenant entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tenant_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
