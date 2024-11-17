Using CodeIgniter to Develop an App for Importing Data from Excel to Databases
==============================================================================


.. image:: https://img.shields.io/badge/CodeIgniter-v3.1.11-brightgreen
   :target: https://codeigniter.com/
   :alt: CodeIgniter Version

.. image:: https://img.shields.io/badge/Bootstrap-v5.0.2-blueviolet
   :target: https://getbootstrap.com/
   :alt: Bootstrap Version

.. image:: https://img.shields.io/github/license/FREDVUNI/ci-excel-importer
   :target: https://github.com/FREDVUNI/ci-excel-importer/blob/main/LICENSE
   :alt: MIT License

This repository contains a web application developed using the CodeIgniter PHP framework. The app allows users to import data from Excel spreadsheets into their databases seamlessly. The user interface is built using Bootstrap for a modern and user-friendly experience. The `ci-excel-importer.sql` file is also included in the repository, containing the necessary database structure.

Getting Started
===============

Prerequisites
-------------

To run this application, ensure you have the following software installed on your system:

1. PHP (version 7.2 or higher)
2. MySQL (or any other compatible database)
3. Web server (e.g., Apache, Nginx)

Installation
------------

Follow these steps to set up the application on your local machine:

1. Clone the repository to your local environment::

    git clone https://github.com/FREDVUNI/ci-excel-importer.git

2. Navigate to the project folder::

    cd ci-excel-importer

3. Import the `ci-excel-importer.sql` file into your MySQL database to create the necessary tables.

4. Rename the `env.example` file to `.env` and configure your database connection settings::

    DB_HOST=localhost
    DB_USER=your_database_username
    DB_PASS=your_database_password
    DB_NAME=your_database_name

5. Install the required dependencies using `Composer`_::

    composer install

6. Start the development server::

    php -S localhost:8000 -t public/

7. Access the application in your web browser at `http://localhost:8000`.

How to Use
==========

1. **Upload Excel File**: On the main page, users can find an option to upload their Excel (.xls or .xlsx) files.

2. **Mapping Fields**: After the file is uploaded, the application prompts users to map the columns in their Excel sheet to the corresponding fields in their database table. This ensures the imported data is correctly placed.

3. **Import Data**: Once the field mapping is done, users can initiate the data import process by clicking the "Import" button. The application will read the Excel file, validate the data, and insert it into the database.

4. **View and Edit Imported Data**: Users can view the imported data in a user-friendly interface. Additionally, you can integrate a feature to allow users to edit and update the data directly from the application.

5. **Export Data**: If required, you can also include a feature to export data from the database to an Excel file for users to download.

Contributing
============

We encourage contributions to enhance the functionality and user interface of this app. If you wish to contribute, please follow these steps:

1. Fork the repository.

2. Create a new branch for your feature/fix::

    git checkout -b feature/your-feature-name

3. Make your changes and commit them::

    git commit -m "Your detailed commit message"

4. Push the changes to your forked repository::

    git push origin feature/your-feature-name

5. Create a pull request to the main repository, providing a detailed explanation of your changes.



