---

# Telegram Bot Message, Photo, and Video Sender 📢🤖

This PHP script is a versatile solution for managing communication with your Telegram bot. It streamlines the process of sending text messages, photos, and videos while ensuring seamless integration with your MySQL database. Whether for notifications, updates, or media sharing, this tool is designed for efficiency and simplicity.

---

## Features 🌟

- **Effortless Text Messaging**: Send clear and concise text messages to your bot with ease.
- **Rich Media Support**: Share photos and videos, complete with optional captions, to add depth to your messages.
- **Automated Targeting**: The script dynamically fetches recipient chat IDs from your database, ensuring precise message delivery.
- **User-Friendly Interface**: A clean and intuitive web interface simplifies content creation and delivery.

---

## Prerequisites ✅

### What You Need:
1. **Telegram Bot Token**  
   Obtain a unique token for your bot by interacting with [@BotFather](https://t.me/botfather). This token is required to authenticate with the Telegram Bot API.

2. **MySQL Database**  
   Set up a database to store the chat IDs of users. These IDs will act as the target for your messages.

3. **Web Server with PHP**  
   Host the script on a web server capable of executing PHP. Popular choices include local environments (e.g., XAMPP, WAMP) or cloud-based hosting.

---

## Installation and Setup 🚀

### Step 1: Clone the Repository
Use the following command to download the project:
```bash
git clone https://github.com/abirxdhackz/Broadcast-Code.git
```

### Step 2: Configure the Database Connection
Open the `index.php` file and update the database details:
```php
$Serverhost = "localhost"; // MySQL host (e.g., 'localhost')
$Serverusername = "root";  // MySQL username
$Serverpassword = "";      // MySQL password
$Serverdatabase = "";      // Database name
```

### Step 3: Add Your Telegram Bot Token
Replace the placeholder in `index.php` with your bot's token:
```php
$bot_token = "your-telegram-bot-token";
```

### Step 4: Create the Required Database Table
Log into your MySQL database and run this SQL query to set up the table:
```sql
CREATE TABLE `IntecDevid` (
  `chat_id` VARCHAR(255) NOT NULL
);
```

### Step 5: Populate the Database Table
Insert chat IDs of your target users into the `IntecDevid` table:
- **Manual Entry**: Use tools like phpMyAdmin or the MySQL CLI.
- **Automated Entry**: Capture chat IDs dynamically by prompting users to interact with your bot.

### Step 6: Upload Files to Your Web Server
Place the project files (`index.php`, `styles.css`, etc.) on your web server. Ensure file permissions allow execution and media access.

### Step 7: Access the Application
Open a web browser and navigate to the URL where the script is hosted. The user-friendly interface will guide you through sending messages and media.

---

## Where to Host 🌐

### Recommended Hosting Platforms:
1. **Free Hosting Platforms**
   - **[000webhost](https://www.000webhost.com/)**  
     Offers free PHP hosting with MySQL support, ideal for small projects.
   - **[InfinityFree](https://infinityfree.net/)**  
     Provides free hosting with no ads, supporting PHP and MySQL.
   - **[Heroku](https://www.heroku.com/)**  
     A cloud platform with free tiers for deploying PHP applications. Requires additional configuration for MySQL (e.g., ClearDB or JawsDB add-ons).
   - **[Render](https://render.com/)**  
     Free web service hosting with PHP support; great for deploying small-scale applications.

2. **Paid Hosting Platforms** (More reliable for scaling or high traffic)
   - **[Bluehost](https://www.bluehost.com/)**
   - **[HostGator](https://www.hostgator.com/)**
   - **[SiteGround](https://www.siteground.com/)**

3. **Local Hosting** (For development and testing)
   - Use tools like **XAMPP**, **WAMP**, or **MAMP** to host the script locally. These are ideal for development but not for production use.

---

## Usage Instructions 🤳

### Sending a Text Message
1. Navigate to the "For Message" section.
2. Enter the text you want to send.
3. Click **Send** to broadcast your message to all stored chat IDs.

### Sending a Photo
1. In the "For Image" section, click **Select an image** to upload your file.
2. Optionally, enter a caption in the "Caption" field.
3. Click **Send** to share the photo.

### Sending a Video
1. In the "For Video" section, click **Select a video** to upload your file.
2. Optionally, enter a caption in the "Caption" field.
3. Click **Send** to distribute the video.

---

## Troubleshooting 🔍

### Common Issues and Solutions:
1. **Database Connection Failure**  
   - Double-check your MySQL credentials in `index.php`.
   - Ensure the database server is running and accessible.

2. **Invalid Bot Token**  
   - Verify your token with [@BotFather](https://t.me/botfather).
   - Ensure the bot token has permissions to send messages, photos, and videos.

3. **Empty Chat ID Table**  
   - Confirm that the `IntecDevid` table contains valid chat IDs.
   - Test if the bot is capturing and storing IDs correctly.

4. **File Permission Issues**  
   - Check that your web server has read and write permissions for the script and uploaded media files.

### Still Facing Problems?  
Submit a detailed issue on the [GitHub repository](https://github.com/abirxdhackz/Broadcast-Code), and the community will assist you.

---

## Contributing 🤝

We welcome contributions to enhance this project. Whether it’s bug fixes, new features, or performance improvements, feel free to fork the repository and submit a pull request.

---

## License 📄

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT). Use, modify, and distribute freely while giving credit to the original creators.

---

This version includes hosting recommendations with details on free and paid options, making it more useful for users unfamiliar with hosting platforms.
