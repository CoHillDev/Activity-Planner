<?php
// api/src/Controller/CreateBookPublication.php
namespace App\Controller;

use ApiPlatform\OpenApi\Model\Response;
use App\Entity\Message;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Serializer\Context\Normalizer\ObjectNormalizerContextBuilder;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\VarDumper\Cloner\Data;

#[AsController]
class CreateMessageController extends AbstractController
{

    public function __construct(private HubInterface $hub, private readonly EntityManagerInterface $em, private SerializerInterface $serializer)
    {
        
    }

    public function __invoke($data)
    {
        $this->em->persist($data);
        $this->em->flush();
        $context = (new ObjectNormalizerContextBuilder())
        ->withGroups('message_notification')
        ->toArray();

        $update = new Update(
            'https://localhost/users/'.$data->getRecipient()->getId() . "/messages",
            $this->serializer->serialize($data, 'json',$context)        
        );


        $this->hub->publish($update);

        $update = new Update(
            'https://localhost/users/'.$data->getSent()->getId() . "/messages",
            $this->serializer->serialize($data, 'json',$context)       
        );


        $this->hub->publish($update);


        return $data;
    }
    
}