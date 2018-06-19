<?php

return [
  'zf_annotation' => [
    // in which modules to search annotated classes
    'scan_modules' => ['Application'],

    /*
     * IMPORTANT NOTE:
     * The given directories should NOT be the directory where classes of the namespace are in,
     * but the base directory of the root namespace. The AnnotationRegistry uses a namespace to directory separator
     * approach to resolve the correct path.
     */
//    'namespaces' => array(
//      'My\Annotation' => '/path/to/annotations'
//    ),

    // listeners to events emitted by parser.
    // they process class annotations and transforms them into config values
    // add your own here.
    'event_listeners' => array(
      'ZfAnnotation\EventListener\RouteListener',
      // ...
    ),
    // if not null, supplied directory would used for cache to speed up parsing
    'cache' => 'data/zf-annotations',
    // if true, will ignore cached data and always return a fresh one.
    'cache_debug' => true
  ]
];
