1. Make sure to download XAMPP (on Windows) if you are Windows or MAMP if you are on Windows MacOSX.

2. Move "Amul" folder to htdocs folder inside htdocs folder of XAMPP/MAMP download folder. [In my case (C:\xampp\htdocs) or (/Applications/MAMP/htdocs)].

3. Inside XAMPP download folder look for "xampp_start" and "xampp-control", run both applications, or simply run MAMP on macOS under /Applications/MAMP.

4. In "xampp-control", "start" Modules named "Apache" and "MySQL". or in MAMP make sure preferrences to be as follows: 
Port > Apache (8888), Nginx (7888) and  MySQL (8889). Then click OK and press start button with power icon, make sure power button glows green.
If its not green, try changing the ports.

5. Now open your browser and go to URL "localhost:(portnumber)/phpmyadmin".

6. Click "New" on the left panel.

7. Type "Amul" in the "database name" input and click on "Create".

8. Now Click on "Import" on the top ribbon.

9. Click "Choose File" and go to "C:\xampp\htdocs\Amul\" or "/Applications/MAMP/htdocs/Amul/" and select "amul.sql", scroll down and click on "Import".

10. Now go to URL "localhost/Amul/User" on your browser.

11. You can use these to login :

User Login Credentials [You can create your own account too (No personal info needed)]:
User ID = UserYash
Password = User12345

Admin Login Credentials:
Admin_ID = AdminYash
Password = Admin123

Passwords are Case-sensitive.

Thank You for reading and testing out this Project.