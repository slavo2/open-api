<?php

namespace Jane\OpenApi\Tests\Expected\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new SchemaNormalizer();
        $normalizers[] = new SchemaObjectPropertyNormalizer();
        return $normalizers;
    }
}