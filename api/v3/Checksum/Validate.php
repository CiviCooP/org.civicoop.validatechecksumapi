<?php
use CRM_Validatechecksumapi_ExtensionUtil as E;

/**
 * Checksum.Validate API specification (optional)
 * This is used for documentation and validation.
 *
 * @param array $spec description of fields supported by this API call
 * @return void
 * @see http://wiki.civicrm.org/confluence/display/CRMDOC/API+Architecture+Standards
 */
function _civicrm_api3_checksum_Validate_spec(&$spec) {
  $spec['contact_id'] = array(
    'name' => 'contact_id',
    'title' => 'contact_id',
    'type' => CRM_Utils_Type::T_INT,
    'api.required' => 1,
  );
  $spec['checksum'] = array(
    'name' => 'checksum',
    'title' => 'checksum',
    'type' => CRM_Utils_Type::T_STRING,
    'api.required' => 1,
  );
}

/**
 * Checksum.Validate API
 *
 * @param array $params
 * @return array API result descriptor
 * @see civicrm_api3_create_success
 * @see civicrm_api3_create_error
 * @throws API_Exception
 */
function civicrm_api3_checksum_Validate($params) {
  $returnValues[$params['contact_id']]['is_valid'] = CRM_Contact_BAO_Contact_Utils::validChecksum($params['contact_id'], $params['checksum']);
  return civicrm_api3_create_success($returnValues, $params, 'Checksum', 'Validate');
}
