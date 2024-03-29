<?php

namespace App\Traits;

trait ResponseCode
{
    // This can be found in the Symfony\Component\HttpFoundation\Response class

    private $HTTP_CONTINUE = 100;
    private $HTTP_SWITCHING_PROTOCOLS = 101;
    private $HTTP_PROCESSING = 102;            // RFC2518
    private $HTTP_OK = 200;
    private $HTTP_CREATED = 201;
    private $HTTP_ACCEPTED = 202;
    private $HTTP_NON_AUTHORITATIVE_INFORMATION = 203;
    private $HTTP_NO_CONTENT = 204;
    private $HTTP_RESET_CONTENT = 205;
    private $HTTP_PARTIAL_CONTENT = 206;
    private $HTTP_MULTI_STATUS = 207;          // RFC4918
    private $HTTP_ALREADY_REPORTED = 208;      // RFC5842
    private $HTTP_IM_USED = 226;               // RFC3229
    private $HTTP_MULTIPLE_CHOICES = 300;
    private $HTTP_MOVED_PERMANENTLY = 301;
    private $HTTP_FOUND = 302;
    private $HTTP_SEE_OTHER = 303;
    private $HTTP_NOT_MODIFIED = 304;
    private $HTTP_USE_PROXY = 305;
    private $HTTP_RESERVED = 306;
    private $HTTP_TEMPORARY_REDIRECT = 307;
    private $HTTP_PERMANENTLY_REDIRECT = 308;  // RFC7238
    private $HTTP_BAD_REQUEST = 400;
    private $HTTP_UNAUTHORIZED = 401;
    private $HTTP_PAYMENT_REQUIRED = 402;
    private $HTTP_FORBIDDEN = 403;
    private $HTTP_NOT_FOUND = 404;
    private $HTTP_METHOD_NOT_ALLOWED = 405;
    private $HTTP_NOT_ACCEPTABLE = 406;
    private $HTTP_PROXY_AUTHENTICATION_REQUIRED = 407;
    private $HTTP_REQUEST_TIMEOUT = 408;
    private $HTTP_CONFLICT = 409;
    private $HTTP_GONE = 410;
    private $HTTP_LENGTH_REQUIRED = 411;
    private $HTTP_PRECONDITION_FAILED = 412;
    private $HTTP_REQUEST_ENTITY_TOO_LARGE = 413;
    private $HTTP_REQUEST_URI_TOO_LONG = 414;
    private $HTTP_UNSUPPORTED_MEDIA_TYPE = 415;
    private $HTTP_REQUESTED_RANGE_NOT_SATISFIABLE = 416;
    private $HTTP_EXPECTATION_FAILED = 417;
    private $HTTP_I_AM_A_TEAPOT = 418;                                               // RFC2324
    private $HTTP_MISDIRECTED_REQUEST = 421;                                         // RFC7540
    private $HTTP_UNPROCESSABLE_ENTITY = 422;                                        // RFC4918
    private $HTTP_LOCKED = 423;                                                      // RFC4918
    private $HTTP_FAILED_DEPENDENCY = 424;                                           // RFC4918
    private $HTTP_RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL = 425;   // RFC2817
    private $HTTP_UPGRADE_REQUIRED = 426;                                            // RFC2817
    private $HTTP_PRECONDITION_REQUIRED = 428;                                       // RFC6585
    private $HTTP_TOO_MANY_REQUESTS = 429;                                           // RFC6585
    private $HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;                             // RFC6585
    private $HTTP_UNAVAILABLE_FOR_LEGAL_REASONS = 451;
    private $HTTP_INTERNAL_SERVER_ERROR = 500;
    private $HTTP_NOT_IMPLEMENTED = 501;
    private $HTTP_BAD_GATEWAY = 502;
    private $HTTP_SERVICE_UNAVAILABLE = 503;
    private $HTTP_GATEWAY_TIMEOUT = 504;
    private $HTTP_VERSION_NOT_SUPPORTED = 505;
    private $HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL = 506;                        // RFC2295
    private $HTTP_INSUFFICIENT_STORAGE = 507;                                        // RFC4918
    private $HTTP_LOOP_DETECTED = 508;                                               // RFC5842
    private $HTTP_NOT_EXTENDED = 510;                                                // RFC2774
    private $HTTP_NETWORK_AUTHENTICATION_REQUIRED = 511;                             // RFC6585

    public
    static $statusTexts = array(
        100 => 'Continue',
        101 => 'Switching Protocols',
        102 => 'Processing',            // RFC2518
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',
        207 => 'Multi-Status',          // RFC4918
        208 => 'Already Reported',      // RFC5842
        226 => 'IM Used',               // RFC3229
        300 => 'Multiple Choices',
        301 => 'Moved Permanently',
        302 => 'Found',
        303 => 'See Other',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        307 => 'Temporary Redirect',
        308 => 'Permanent Redirect',    // RFC7238
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Timeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Payload Too Large',
        414 => 'URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Range Not Satisfiable',
        417 => 'Expectation Failed',
        418 => 'I\'m a teapot',                                               // RFC2324
        421 => 'Misdirected Request',                                         // RFC7540
        422 => 'Unprocessable Entity',                                        // RFC4918
        423 => 'Locked',                                                      // RFC4918
        424 => 'Failed Dependency',                                           // RFC4918
        425 => 'Reserved for WebDAV advanced collections expired proposal',   // RFC2817
        426 => 'Upgrade Required',                                            // RFC2817
        428 => 'Precondition Required',                                       // RFC6585
        429 => 'Too Many Requests',                                           // RFC6585
        431 => 'Request Header Fields Too Large',                             // RFC6585
        451 => 'Unavailable For Legal Reasons',                               // RFC7725
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported',
        506 => 'Variant Also Negotiates',                                     // RFC2295
        507 => 'Insufficient Storage',                                        // RFC4918
        508 => 'Loop Detected',                                               // RFC5842
        510 => 'Not Extended',                                                // RFC2774
        511 => 'Network Authentication Required',                             // RFC6585
    );
}
