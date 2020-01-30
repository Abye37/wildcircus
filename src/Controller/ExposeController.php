<?php

namespace App\Controller;

use App\Entity\Expose;
use App\Form\ExposeType;
use App\Repository\ExposeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/expose")
 */
class ExposeController extends AbstractController
{
    /**
     * @Route("/", name="expose_index", methods={"GET"})
     */
    public function index(ExposeRepository $exposeRepository): Response
    {
        return $this->render('expose/index.html.twig', [
            'exposes' => $exposeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="expose_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $expose = new Expose();
        $form = $this->createForm(ExposeType::class, $expose);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($expose);
            $entityManager->flush();

            return $this->redirectToRoute('expose_index');
        }

        return $this->render('expose/new.html.twig', [
            'expose' => $expose,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="expose_show", methods={"GET"})
     */
    public function show(Expose $expose): Response
    {
        return $this->render('expose/show.html.twig', [
            'expose' => $expose,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="expose_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Expose $expose): Response
    {
        $form = $this->createForm(ExposeType::class, $expose);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('expose_index');
        }

        return $this->render('expose/edit.html.twig', [
            'expose' => $expose,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="expose_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Expose $expose): Response
    {
        if ($this->isCsrfTokenValid('delete'.$expose->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($expose);
            $entityManager->flush();
        }

        return $this->redirectToRoute('expose_index');
    }
}
