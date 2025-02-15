# VHMS (Virtual Hotel Management System)

## Project Description
The Virtual Hotel Management System (VHMS) is designed to streamline hotel food registration and related tasks, improving operational efficiency for hotel staff and customers. The system provides an intuitive interface for managing menus, order details, and hotel services.

## Features
- User-friendly interface for seamless interaction
- Online food ordering and menu management
- Order tracking and status updates
- Secure login for hotel staff and customers
- Integrated MySQL database for efficient data handling

## Prerequisites
Before running this project, ensure you have the following installed:
- XAMPP (for Apache server and MySQL database)
- VS Code (for development and execution)
- PHP 7.x or higher

## Installation Steps
### Step 1: Install XAMPP
1. Download and install XAMPP from [Apache Friends](https://www.apachefriends.org/download.html).
2. Start Apache and MySQL from the XAMPP control panel.

### Step 2: Install VS Code
1. Download and install Visual Studio Code from [VS Code](https://code.visualstudio.com/).
2. Open the project folder in VS Code.

### Step 3: Clone the Repository

    git clone https://github.com/ganeshkale0209/Virtual-Hotel-Management-System.git
    cd VHMS


### Step 4: Set Up the Database
1. Open `phpMyAdmin` (http://localhost/phpmyadmin/).
2. Create a new database named `vhms`.
3. Import the provided `vhms.sql` file.

### Step 5: Configure Database Connection
Edit the `config.php` file and update the database credentials:
```php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vhms";
```

### Step 6: Run the Application
1. Move the project folder to the `htdocs` directory inside XAMPP.
2. Start Apache and MySQL from the XAMPP control panel.
3. Open a web browser and visit `http://localhost/VHMS/`.

## Usage Instructions
1. Login with the provided credentials or create a new account.
2. Browse the menu and place orders.
3. Track order status in real-time.
4. Hotel staff can manage orders and update menus.

## Customization
- Modify the frontend using HTML, CSS, and JavaScript.
- Update backend functionalities in PHP.
- Extend database structure as needed.

## Troubleshooting
- If the site doesn't load, check if Apache and MySQL are running in XAMPP.
- If database issues arise, ensure `vhms.sql` is properly imported.
- Check `config.php` for correct database credentials.

## Also you can see the working proof in that folder.
