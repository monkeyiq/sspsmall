
    // An authentication source which can authenticate against SAML 2.0 IdPs.
    'sp2' => [
        'saml:SP',

        // The entity ID of this SP.
        'entityID' => 'https://sspapp2.example.org/',

        // The entity ID of the IdP this SP should contact.
        // Can be NULL/unset, in which case the user will be shown a list of available IdPs.
        'idp' => 'urn:x-simplesamlphp:sspsmall-idp',

        // The URL to the discovery service.
        // Can be NULL/unset, in which case a builtin discovery service will be used.
        'discoURL' => null,

        /*
         * If SP behind the SimpleSAMLphp in IdP/SP proxy mode requests
         * AuthnContextClassRef, decide whether the AuthnContextClassRef will be
         * processed by the IdP/SP proxy or if it will be passed to the original
         * IdP in front of the IdP/SP proxy.
         */
        'proxymode.passAuthnContextClassRef' => false,

        /*
         * The attributes parameter must contain an array of desired attributes by the SP.
         * The attributes can be expressed as an array of names or as an associative array
         * in the form of 'friendlyName' => 'name'. This feature requires 'name' to be set.
         * The metadata will then be created as follows:
         * <md:RequestedAttribute FriendlyName="friendlyName" Name="name" />
         */
        /*
        'name' => [
            'en' => 'A service',
            'no' => 'En tjeneste',
        ],

        'attributes' => [
            'attrname' => 'urn:oid:x.x.x.x',
        ],
        'attributes.required' => [
            'urn:oid:x.x.x.x',
        ],
        */
    ],


    // An authentication source which can authenticate against SAML 2.0 IdPs.
    'sp3' => [
        'saml:SP',

        // The entity ID of this SP.
        'entityID' => 'https://sspapp3.example.org/',

        // The entity ID of the IdP this SP should contact.
        // Can be NULL/unset, in which case the user will be shown a list of available IdPs.
        'idp' => 'urn:x-simplesamlphp:sspsmall-idp',

        // The URL to the discovery service.
        // Can be NULL/unset, in which case a builtin discovery service will be used.
        'discoURL' => null,

        /*
         * If SP behind the SimpleSAMLphp in IdP/SP proxy mode requests
         * AuthnContextClassRef, decide whether the AuthnContextClassRef will be
         * processed by the IdP/SP proxy or if it will be passed to the original
         * IdP in front of the IdP/SP proxy.
         */
        'proxymode.passAuthnContextClassRef' => false,

        /*
         * The attributes parameter must contain an array of desired attributes by the SP.
         * The attributes can be expressed as an array of names or as an associative array
         * in the form of 'friendlyName' => 'name'. This feature requires 'name' to be set.
         * The metadata will then be created as follows:
         * <md:RequestedAttribute FriendlyName="friendlyName" Name="name" />
         */
        /*
        'name' => [
            'en' => 'A service',
            'no' => 'En tjeneste',
        ],

        'attributes' => [
            'attrname' => 'urn:oid:x.x.x.x',
        ],
        'attributes.required' => [
            'urn:oid:x.x.x.x',
        ],
        */
    ],



    // An authentication source which can authenticate against SAML 2.0 IdPs.
    'sp4' => [
        'saml:SP',

        // The entity ID of this SP.
        'entityID' => 'https://sspapp4.example.org/',

        // The entity ID of the IdP this SP should contact.
        // Can be NULL/unset, in which case the user will be shown a list of available IdPs.
        'idp' => 'urn:x-simplesamlphp:sspsmall-idp',

        // The URL to the discovery service.
        // Can be NULL/unset, in which case a builtin discovery service will be used.
        'discoURL' => null,

        /*
         * If SP behind the SimpleSAMLphp in IdP/SP proxy mode requests
         * AuthnContextClassRef, decide whether the AuthnContextClassRef will be
         * processed by the IdP/SP proxy or if it will be passed to the original
         * IdP in front of the IdP/SP proxy.
         */
        'proxymode.passAuthnContextClassRef' => false,

        /*
         * The attributes parameter must contain an array of desired attributes by the SP.
         * The attributes can be expressed as an array of names or as an associative array
         * in the form of 'friendlyName' => 'name'. This feature requires 'name' to be set.
         * The metadata will then be created as follows:
         * <md:RequestedAttribute FriendlyName="friendlyName" Name="name" />
         */
        /*
        'name' => [
            'en' => 'A service',
            'no' => 'En tjeneste',
        ],

        'attributes' => [
            'attrname' => 'urn:oid:x.x.x.x',
        ],
        'attributes.required' => [
            'urn:oid:x.x.x.x',
        ],
        */
    ],



    // An authentication source which can authenticate against SAML 2.0 IdPs.
    'sp5' => [
        'saml:SP',

        // The entity ID of this SP.
        'entityID' => 'https://sspapp5.example.org/',

        // The entity ID of the IdP this SP should contact.
        // Can be NULL/unset, in which case the user will be shown a list of available IdPs.
        'idp' => 'urn:x-simplesamlphp:sspsmall-idp',

        // The URL to the discovery service.
        // Can be NULL/unset, in which case a builtin discovery service will be used.
        'discoURL' => null,

        /*
         * If SP behind the SimpleSAMLphp in IdP/SP proxy mode requests
         * AuthnContextClassRef, decide whether the AuthnContextClassRef will be
         * processed by the IdP/SP proxy or if it will be passed to the original
         * IdP in front of the IdP/SP proxy.
         */
        'proxymode.passAuthnContextClassRef' => false,

        /*
         * The attributes parameter must contain an array of desired attributes by the SP.
         * The attributes can be expressed as an array of names or as an associative array
         * in the form of 'friendlyName' => 'name'. This feature requires 'name' to be set.
         * The metadata will then be created as follows:
         * <md:RequestedAttribute FriendlyName="friendlyName" Name="name" />
         */
        /*
        'name' => [
            'en' => 'A service',
            'no' => 'En tjeneste',
        ],

        'attributes' => [
            'attrname' => 'urn:oid:x.x.x.x',
        ],
        'attributes.required' => [
            'urn:oid:x.x.x.x',
        ],
        */
    ],




    // An authentication source which can authenticate against SAML 2.0 IdPs.
    'sp6' => [
        'saml:SP',

        // The entity ID of this SP.
        'entityID' => 'https://sspapp6.example.org/',

        // The entity ID of the IdP this SP should contact.
        // Can be NULL/unset, in which case the user will be shown a list of available IdPs.
        'idp' => 'urn:x-simplesamlphp:sspsmall-idp',

        // The URL to the discovery service.
        // Can be NULL/unset, in which case a builtin discovery service will be used.
        'discoURL' => null,

        /*
         * If SP behind the SimpleSAMLphp in IdP/SP proxy mode requests
         * AuthnContextClassRef, decide whether the AuthnContextClassRef will be
         * processed by the IdP/SP proxy or if it will be passed to the original
         * IdP in front of the IdP/SP proxy.
         */
        'proxymode.passAuthnContextClassRef' => false,

        /*
         * The attributes parameter must contain an array of desired attributes by the SP.
         * The attributes can be expressed as an array of names or as an associative array
         * in the form of 'friendlyName' => 'name'. This feature requires 'name' to be set.
         * The metadata will then be created as follows:
         * <md:RequestedAttribute FriendlyName="friendlyName" Name="name" />
         */
        /*
        'name' => [
            'en' => 'A service',
            'no' => 'En tjeneste',
        ],

        'attributes' => [
            'attrname' => 'urn:oid:x.x.x.x',
        ],
        'attributes.required' => [
            'urn:oid:x.x.x.x',
        ],
        */
    ],

