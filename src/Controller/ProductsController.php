<?php

namespace App\Controller;

use App\DTO\LowestPriceEnquiry;
use App\Service\Serializer\DTOSerializer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController {

    #[Route('/products', name: 'app_products')]
    public function index(): JsonResponse {
        return $this->json([
                    'message' => 'Welcome to your new controller!',
                    'path' => 'src/Controller/ProductsController.php',
        ]);
    }

    #[Route('/products/{id}/lowest-price', name: 'lowest-price', methods: 'POST')]
    public function lowestPrice(Request $request, int $id, DTOSerializer $serializer): Response {
        if ($request->headers->has('force_fail')) {
            return new JsonResponse(['error' => 'Promotions Engine Failure Message'],
                    $request->headers->get('force_fail')
            );
        }

        // 1. Deserialize json data to a EnquiryDTO
        /** @var LowestPriceEnquiry $lowestPriceEnquiry * */
        $lowestPriceEnquiry = $serializer->deserialize($request->getContent(), LowestPriceEnquiry::class, 'json');
        
        // 2. Pass the enquiry to a promotion filter
        // The appropriate promotion will be applied
        
        // 3. Return the modified enquiry
        $lowestPriceEnquiry
                ->setDiscountedPrice(50)
                ->setPrice(100)
                ->setProductId(3)
                ->setPromotionName('Black Friday half price sale');

        $responseContent = $serializer->serialize($lowestPriceEnquiry, 'json');

        return new Response($responseContent, 200);
    }

    #[Route('/products/{id}/promotions', name: 'promotions', methods: 'GET')]
    public function promotions($param) {
        
    }

}
