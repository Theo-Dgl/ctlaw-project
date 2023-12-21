<?php

namespace App\Enums;

enum HttpStatusCode: int {
    case OK = 200;
    case CREATED = 201;
    case NO_CONTENT = 204;
    case BAD_REQUEST = 400;
    case NOT_FOUND = 404;
}
