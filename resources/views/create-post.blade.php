<x-layout>
    <div class="container mx-auto py-5 max-w-2xl">
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="post-title" class="text-gray-600 mb-1 block text-sm">
                    <small>Title</small>
                </label>
                <input required name="title" id="post-title"
                       class="w-full border rounded py-2 px-3 text-lg focus:outline-none focus:ring focus:border-blue-300"
                       type="text" placeholder="" autocomplete="off"/>
            </div>

            <div class="mb-4">
                <label for="post-body" class="text-gray-600 mb-1 block text-sm">
                    <small>Body Content</small>
                </label>
                <textarea required name="body" id="post-body"
                          class="w-full border rounded py-2 px-3 h-48 resize-y focus:outline-none focus:ring focus:border-blue-300"
                          type="text"></textarea>
            </div>

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Save New Post
            </button>
        </form>
    </div>

    <footer class="text-center text-white text-sm py-4 mt-auto w-full">
        <p>Copyright &copy; 2022 <a href="/" class="text-blue-300 hover:text-blue-400">OurApp</a>. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <script>
        $('[data-toggle="tooltip"]').tooltip()
    </script>
</x-layout>