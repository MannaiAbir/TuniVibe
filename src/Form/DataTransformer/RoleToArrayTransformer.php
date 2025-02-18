<?php
// src/Form/DataTransformer/RoleToArrayTransformer.php
namespace App\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

class RoleToArrayTransformer implements DataTransformerInterface
{
    public function transform($roles)
    {
        // Convert the array of roles to a single role (for form display)
        return $roles ? $roles[0] : null;
    }

    public function reverseTransform($role)
    {
        // Convert the single role back to an array
        return $role ? [$role] : [];
    }
}