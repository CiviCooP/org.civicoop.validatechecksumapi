# org.civicoop.validatechecksumapi
This extension introduces api Checksum Validate and allows you to check with the API if a checksum is valid for a contact.
Requires params contact_id and checksum, and will return either is_valid:true or is_valid:false
The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v5.4+
* CiviCRM (*FIXME: Version number*)

## Installation (Web UI)

This extension has not yet been published for installation via the web UI.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl org.civicoop.validatechecksumapi@https://github.com/FIXME/org.civicoop.validatechecksumapi/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/FIXME/org.civicoop.validatechecksumapi.git
cv en validatechecksumapi
```

