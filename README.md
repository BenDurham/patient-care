# Patient Care Application

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)


Built ontop of CakePHP, the framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).
This application is built as a backend for a medical office to process patient invocies and appointments.

## Configuration

Read and edit `config/app.php` and setup the 'Datasources' and any other
configuration relevant for your application.

## General Setup

Standard creation process for the application:
1. Create a Carrier.
2. Create a Patient associated with the Carrier.
3. Create a Doctor.
4. Create an Appointment associated with a Doctor and Patient.
5. Create an Invoice associated with the Doctor and Patient.