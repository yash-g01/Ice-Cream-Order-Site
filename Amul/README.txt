1. Make sure to download XAMPP if you are Windows or MAMP if you are on MacOSX.

2. Download Zip of this repo and extract it. Move "Amul" folder (Amul Folder is inside the unzipped folder) inside "htdocs" folder of XAMPP/MAMP download folder. In my case (C:\xampp\htdocs) or (/Applications/MAMP/htdocs).

3. Inside XAMPP download folder look for "xampp_start" and "xampp-control", run both applications, or simply run MAMP on macOS under /Applications/MAMP.

4. In "xampp-control", "start" Modules named "Apache" and "MySQL". OR in MAMP make sure preferrences to be as follows: Port > Apache (8888), Nginx (7888) and MySQL (8889). Then click OK and press start button with power icon, make sure power button glows green. If its not green, try changing the ports or server.

5. Now open your browser and go to URL "localhost:(portnumber)/phpmyadmin".

6. Click "New" on the left panel of phpMyAdmin.

7. Type "Amul" in the "database name" input and click on "Create". OR Name the database whatever you like but make sure to change the database name in the config files of user and admin.

8. Now Click on "Import" on the top ribbon.

9. Click "Choose File" and go to "C:\xampp\htdocs\Amul" or "/Applications/MAMP/htdocs/Amul/" and select "amul.sql", scroll down and click on "Import".

10. Now go to URL "localhost/Amul/User" on your browser.

11. You can use these to login :
User Login Credentials:
User ID = UserYash
Password = User12345

Admin Login Credentials:
Admin_ID = AdminYash
Password = Admin123

Passwords are Case-sensitive.

Make sure to change the username and password to your MySQL username and password in the config files of user and admin.

Thank You for reading and testing out this Project.
