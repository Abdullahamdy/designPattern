<?php

namespace App\Http\Controllers;

use App\Builders\InvoiceBuilder;

class BuilderController extends Controller
{
    public function builderTest()
    {
          $invoice = (new InvoiceBuilder())
            ->customer('Ahmed Ali')
            ->addItem('Laptop', 2, 1500)
            ->addItem('Mouse', 5, 50)
            ->tax(200)
            ->discount(100)
            ->currency('USD')
            ->status('unpaid')
            ->notes('Deliver before 15 Feb')
            ->meta(['created_by' => 'Admin'])
            ->build();

        return response()->json($invoice);

    }
}
