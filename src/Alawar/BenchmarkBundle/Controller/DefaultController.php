<?php

namespace Alawar\BenchmarkBundle\Controller;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Alawar\BenchmarkBundle\Entity\Giftcode;

class DefaultController extends Controller
{
    public function insertAction($iter)
    {
        $em = $this->getDoctrine()->getManager();

        for ($i = 0; $i < $iter; $i++) {
            $gcs[] = $gc = new Giftcode();
            $gc->setAppid('fairytale');
            $gc->setGiftcode(uniqid());
            $gc->setType('promosu');
            $gc->setUid(rand());
            $gc->setValid(true);
            $gc->setDeleted(false);
            $em->persist($gc);
        }
        $em->flush();
        //$a = get_included_files(); sort($a); print_r($a);
        return new JsonResponse(
            array_map(
                function ($gc) {
                    return $gc->getId();
                },
                $gcs
            )
        );
    }

    public function selectAction($iter)
    {
        $em = $this->getDoctrine()->getManager();

        $result = array();
        for ($i = 0; $i < $iter; $i++) {
            $repository = $em->getRepository('AlawarBenchmarkBundle:Giftcode');
            $giftcode = $repository->find($i+1);
            $result[] = $giftcode->getGiftcode();
        }
        return new JsonResponse($result);
    }
}
