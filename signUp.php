<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex flex-col justify-center items-center h-screen">
        <img src="assets/login/profil.png" alt="profil" class="scale-75">
        <div class="max-w-screen-sm bg-white rounded-[62px] border-4 border-sky-600 flex justify-center items-center">
            <div class="flex flex-col p-10">
                <label for="username" class="text-neutral-400 text-2xl font-normal font-['Inter'] m-auto">Username:</label>
                <input type="text" id="username" class="w-[250px] h-[40px] border border-neutral-400 rounded-[10px]"/>
                <label for="username" class="text-neutral-400 text-2xl font-normal font-['Inter'] m-auto">ID Staff:</label>
                <input type="text" id="username" class="w-[250px] h-[40px] border border-neutral-400 rounded-[10px]"/>
                <label for="password" class="text-neutral-400 text-2xl font-normal font-['Inter'] m-auto mt-[10px]">Password:</label>
                <input type="password" id="password" class="w-[250px] h-[40px] border border-neutral-400 rounded-[10px]"/>
                <label for="role" class="text-neutral-400 text-2xl font-normal font-['Inter'] m-auto mt-[10px]">Role:</label>
                <select name="role" id="role" class="w-[250px] h-[40px] border border-neutral-400 rounded-[10px] text-neutral-400">
                    <option value="admin">Admin</option>
                    <option value="Dosen">Dosen</option>
                    <option value="mahasiswa">Mahasiswa</option>
                </select>
                <button class="w-[180px] h-[50px] items-center bg-sky-600 rounded-[31px] text-white text-2xl font-normal font-['Inter'] m-auto mt-5 act:bg-sky-600">Sign Up</button>
                <a href="login.php" class="m-auto text-lg text-gray-600">Login</a>
            </div>
        </div>
    </div>
</body>
</html>