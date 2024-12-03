<?php

/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */


$metadata['https://sspsmall.example.org/'] = [
    'AssertionConsumerService' => [
        [
            'Location' => 'https://localhost/sspsmall/module.php/saml/sp/saml2-acs.php/default-sp',
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Location' => 'https://localhost/sspsmall/module.php/saml/sp/saml2-logout.php/default-sp',
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
    ],
];


$metadata['https://sspapp2.example.org/'] = [
    'AssertionConsumerService' => [
        [
            'Location' => 'https://localhost/sspsmall/module.php/saml/sp/saml2-acs.php/sp2',
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Location' => 'https://localhost/sspsmall/module.php/saml/sp/saml2-logout.php/sp2',
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
    ],
];
