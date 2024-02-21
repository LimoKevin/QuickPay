<?php
// This should include logic to check if the user is logged in and retrieve user data
// For the purpose of this example, I'm assuming user data is already available

// Sample user data (replace this with your actual logic to fetch user data)
$userData = [
    'name' => 'Mbugua',
    'phone' => '+254794432871',
    'profilePicture' => 'pf.jpeg' // Replace with the actual path or URL
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        .profile-container {
            text-align: center;
        }

        .profile-picture {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        .profile-info {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <img src="<?php echo $userData['profilePicture']; ?>" alt="Profile Picture" class="profile-picture">
        <div class="profile-info">
            <h2><?php echo $userData['name']; ?></h2>
            <p><?php echo $userData['phone']; ?></p>
        </div>
        <button onclick="updateProfilePicture()">Update Profile Picture</button>
        <button onclick="deregisterUser()">Deregister User</button>
    </div>

    <script>
        function updateProfilePicture() {
            // Implement logic to update the profile picture
            alert('Functionality to update profile picture needs to be implemented.');
        }

        function deregisterUser() {
            // Implement logic to deregister the user
            alert('Functionality to deregister user needs to be implemented.');
        }
    </script>
</body>
</html>
