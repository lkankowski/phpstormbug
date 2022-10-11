<?php

declare(strict_types=1);

namespace App\Controller;

use Connect\Application\Command\IncomingFailedNotification\DeleteIncomingFailedNotification\DeleteIncomingFailedNotificationCommand;
use Connect\Application\Command\IncomingFailedNotification\ReprocessIncomingFailedNotification\ReprocessIncomingFailedNotificationCommand;
use Ramsey\Uuid\Uuid;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Volt\Async\Bus\CommandBus;
use Volt\Async\Exception\CommandBusException;
use Volt\Async\Exception\QueryBusException;

class SampleController extends AbstractController
{
    #[Route(path: '/sample', methods: ['GET'])]
    public function sample(): Response
    {
        return new Response('xxx', 200);
    }
}
