<?php
/**
 * Created by PhpStorm.
 * User: slik
 * Date: 12.05.2019
 * Time: 17:54
 */

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
  public function number()
  {
    $number = random_int(0, 100);

    return $this->render('lucky/number.html.twig', [
      'number' => $number,
    ]);
  }

  /**
   * @Route("/lucky/test")
   */
  public function test(){
    return new Response(
      '<html><body>TEST</body></html>'
    );
  }
}