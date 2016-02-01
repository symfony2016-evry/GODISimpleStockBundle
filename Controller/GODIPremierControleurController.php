<?php
namespace SYM16SimpleStockBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GODIPremierControleurController extends Controller
{
    public function iLikeAction($dormir){
        return new Response("J'aime beaucoup ".$dormir." !");
    }
    public function ProduitAction($a1,$a2){
        $result = $a1*$a2;
        return new Response("Le produit de ".$a1." par ".$a2." est égale à ".$result);
    }
}
