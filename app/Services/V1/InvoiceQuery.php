<?php

namespace App\Services\V1;

use App\Services\Query;
use Illuminate\Http\Request;

class InvoiceQuery extends Query {

    protected $safeParms = [
        'customerId' => ['eq'],
        'amount' => ['eq', 'lte', 'le', 'gte', 'ge'],
        'status' => ['eq', 'ne'],
        'billedDate' => ['eq', 'lte', 'le', 'gte', 'ge'],
        'paidDate' => ['eq', 'lte', 'le', 'gte', 'ge'],
    ];

    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!='
    ];
}