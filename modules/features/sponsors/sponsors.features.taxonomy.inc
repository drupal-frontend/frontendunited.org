<?php
/**
 * @file
 * sponsors.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function sponsors_taxonomy_default_vocabularies() {
  return array(
    'sponsor_level' => array(
      'name' => 'Sponsor Level',
      'machine_name' => 'sponsor_level',
      'description' => 'Levels for sponsors (Gold, Bronze, Obsidian, Teal, Polkadotted)',
      'hierarchy' => '1',
      'module' => 'taxonomy',
      'weight' => '0',
      'metatags' => array(),
      'rdf_mapping' => array(
        'rdftype' => array(
          0 => 'skos:ConceptScheme',
        ),
        'name' => array(
          'predicates' => array(
            0 => 'dc:title',
          ),
        ),
        'description' => array(
          'predicates' => array(
            0 => 'rdfs:comment',
          ),
        ),
      ),
    ),
  );
}
