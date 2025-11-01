<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Review Phim</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">
    <!-- Header -->
    <header class="bg-black text-white p-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold">🎬 Review Phim 247</h1>
        <nav>
            <a href="#" class="mr-4 hover:underline">Trang chủ</a>
            <a href="#" class="mr-4 hover:underline">Thể loại</a>
            <a href="#" class="hover:underline">Liên hệ</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="p-8">
        <h2 class="text-3xl font-semibold mb-6">Top phim hot</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Movie Card -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://via.placeholder.com/300x450" alt="Movie Poster">
                <div class="p-4">
                    <h3 class="text-xl font-bold">Tên phim 1</h3>
                    <p class="text-sm text-gray-600 mt-2">Mô tả phim ngắn gọn...</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-black text-white text-center py-4 mt-12">
        <p>© 2024 Review Phim 247.</p>
    </footer>
</body>
</html>
