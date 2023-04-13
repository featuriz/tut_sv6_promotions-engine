<?php

/*
 * Copyright (C) 2009 - 2023
 * Author:   Sudhakar Krishnan <featuriz@gmail.com>
 * License:  http://www.featuriz.in/licenses/LICENSE-2.0
 * Created:  Thu, 13 Apr 2023 07:44:38:4438 pm (IST)
 */

namespace App\Service\Serializer;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Description of DTOSerializer
 *
 * @author Sudhakar Krishnan <featuriz@gmail.com>
 */
class DTOSerializer implements SerializerInterface {

    private SerializerInterface $serializer;

    public function __construct() {
        $this->serializer = new Serializer(
                [new ObjectNormalizer(nameConverter: new CamelCaseToSnakeCaseNameConverter())],
                [new JsonEncoder()]
                );
    }

    public function deserialize(mixed $data, string $type, string $format, $context = []): mixed {
        return $this->serializer->deserialize($data, $type, $format, $context);
    }

    public function serialize(mixed $data, string $format, $context = []): string {
        return $this->serializer->serialize($data, $format, $context);
    }

}
