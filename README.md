# Telegram Bot Message, Photo, and Video Sender 📢🤖

This is a robust PHP script that empowers you to seamlessly send messages, photos, and videos to a Telegram bot. The script effortlessly retrieves chat IDs from a MySQL database and leverages the Telegram Bot API to deliver your content directly to the bot, ensuring your communication is efficient and effective.

## Features 🌟

- **Send Text Messages**: Compose and send text messages to your Telegram bot with ease.
- **Upload and Send Photos**: Attach and send images to your bot, making your communication more visually engaging.
- **Upload and Send Videos**: Share short video clips with your bot, adding multimedia elements to your interactions.
- **Add Captions**: Enhance your photo and video shares by adding informative captions.
- **Targeted Delivery**: The script automatically sends your content to all the chat IDs stored in the database, ensuring your message reaches the intended recipients.

## Prerequisites ✅

Before you can utilize this script, you'll need to have the following in place:

1. **Telegram Bot Token**: Obtain a unique token for your Telegram bot, which will be used to authenticate and authorize your script's access to the Telegram Bot API. You can create a new bot by talking to the [@BotFather](https://t.me/botfather) on Telegram.

2. **MySQL Database**: Set up a MySQL database with a table to store the chat IDs of the Telegram users you want to send messages to. You can use a local or remote database, depending on your setup.

3. **Web Server with PHP Support**: Ensure you have a web server that can execute PHP code, as this script is written in PHP. You can use a local development environment (e.g., XAMPP, WAMP, or MAMP) or a remote web hosting service that supports PHP.

## Installation and Setup 🚀

### Step 1: Clone the Repository
```bash
git clone https://github.com/abirxdhackz/Broadcast-Code.git
Step 2: Configure the Database Connection
Open the index.php file and locate the following lines:
php

Copy
$Serverhost = "localhost";
$Serverusername = "";
$Serverpassword = "";
$Serverdatabase = "";
Replace the placeholders with your actual database connection details:
$Serverhost: The hostname or IP address of your MySQL server (e.g., "localhost" for a local database, or a remote server address).
$Serverusername: The username for your MySQL database.
$Serverpassword: The password for your MySQL database.
$Serverdatabase: The name of the database you will be using for this script.
Step 3: Set the Telegram Bot Token
In the index.php file, locate the following line:
php

Copy
$bot_token = "enter your bot token here";
Replace "enter your bot token here" with the actual Telegram bot token you obtained from the @BotFather.
Step 4: Create the Database Table
Log in to your MySQL database (e.g., using a tool like phpMyAdmin or the MySQL command-line interface).
Create a new database table named IntecDevid. The table should have a column named chat_id to store the Telegram chat IDs. You can create the table using the following SQL query:
sql

Copy
CREATE TABLE `IntecDevid` (
  `chat_id` VARCHAR(255) NOT NULL
);
Step 5: Populate the Database Table
To send messages to your Telegram bot, you'll need to store the chat IDs of the users you want to reach in the IntecDevid table.
You can either manually insert the chat IDs into the table or use a script or method to automate the process (e.g., by having users interact with your bot and storing their chat IDs).
Step 6: Upload the Files
Upload the index.php, styles.css, and any other necessary files to your web server.
Ensure that the file paths and permissions are set correctly so that your web server can execute the PHP script and access the necessary files.
Step 7: Access the Web Interface
Open your web browser and navigate to the URL where you uploaded the files.
You should see a user-friendly web form for sending messages, photos, and videos to your Telegram bot.
Usage 🤳
Send a Message
In the "For Message" section, enter the text you want to send to the bot.
Click the "Send" button to dispatch the message to all the chat IDs stored in the database.
Send a Photo
In the "For Image" section, click the "Select an image (optional):" button and choose the photo file you want to send.
(Optional) In the "Caption (if sending an image or video):" section, enter a caption for the photo.
Click the "Send" button to transmit the photo to all the chat IDs stored in the database.
Send a Video
In the "For Video" section, click the "Select a video (optional):" button and choose the video file you want to send.
(Optional) In the "Caption (if sending an image or video):" section, enter a caption for the video.
Click the "Send" button to share the video with all the chat IDs stored in the database.
Troubleshooting 🔍
If you encounter any issues or errors while using the script, please check the following:

Database Connection: Ensure that the database connection details (host, username, password, and database name) are correct and that the database is accessible.
Telegram Bot Token: Verify that the Telegram bot token you have provided is valid and has the necessary permissions to send messages, photos, and videos.
Database Table and Chat IDs: Confirm that the IntecDevid table exists in your database and that it contains the correct chat IDs for the Telegram users you want to reach.
File Permissions: Make sure that the web server has the necessary permissions to read and execute the PHP script, as well as access any uploaded media files.
If you continue to experience problems, please feel free to open an issue on the GitHub repository, and the community will be happy to assist you.

Contributing 🤝
We welcome contributions from the community to enhance the functionality and usability of this Telegram Bot Sender script. If you have any ideas, bug fixes, or improvements, please feel free to submit a pull request on the GitHub repository.

License 📄
This project is licensed under the MIT License.

sql_more

Copy

### Key Points
- Each section is clearly defined with appropriate headers (e.g., `##`, `###`).
- Code blocks are formatted with triple backticks for easy readability.
- Links are included for external resources, such as the Telegram BotFather and the GitHub repository.

Feel free to adjust any sections to better fit your specific needs!
