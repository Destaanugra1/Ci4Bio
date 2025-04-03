<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>

<body class="flex justify-center items-center min-h-screen" id="faq">
  <div class="space-y-2 w-4/5 h-4 max-w-2xl flex flex-col rounded-lg p-6 shadow-md sm:p-8 rounded ">
    <details
      class="group border-s-4 border-green-500 bg-[#1E3A5F] p-6 [&_summary::-webkit-details-marker]:hidden "
      open>
      <summary class="flex cursor-pointer items-center justify-between gap-1.5">
        <h2 class="text-lg font-medium text-white">
          Tentang saya
        </h2>

        <span class="shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="size-5 shrink-0 shadow-sm transition duration-300 group-open:-rotate-45"
            viewBox="0 0 20 20"
            fill="currentColor">
            <path
              fill-rule="evenodd"
              d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
              clip-rule="evenodd" />
          </svg>
        </span>
      </summary>

      <p class="mt-4 leading-relaxed text-white">
        Kepoo
      </p>
    </details>

    <details
      class="group border-s-4 border-green-500 bg-[#1E3A5F] p-6 [&_summary::-webkit-details-marker]:hidden">
      <summary class="flex cursor-pointer items-center justify-between gap-1.5">
        <h2 class="text-lg font-medium text-white">
          Hobi?
        </h2>

        <span class="shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="size-5 shrink-0 shadow-sm transition duration-300 group-open:-rotate-45"
            viewBox="0 0 20 20"
            fill="currentColor">
            <path
              fill-rule="evenodd"
              d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
              clip-rule="evenodd" />
          </svg>
        </span>
      </summary>

      <p class="mt-4 leading-relaxed text-white">
        Apa saja
      </p>
    </details>
  </div>
</body>

</html>