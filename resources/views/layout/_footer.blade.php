        </main>
 <!-- Main footer -->
        <footer class="flex items-center justify-between flex-shrink-0 p-4 border-t max-h-14">
          <div>FirstLine &copy; 2024</div>
          <!-- <div class="text-sm">
            Made by
            <a
              class="text-blue-400 underline"
              href="https://github.com/Kamona-WD"
              target="_blank"
              rel="noopener noreferrer"
              >Ahmed Kamel</a
            >
          </div> -->
          <!-- Github svg -->
          <!-- <div>
            
            <a
              href="https://github.com/Kamona-WD/starter-dashboard-layout"
              target="_blank"
              class="flex items-center space-x-1"
            >
              <svg class="w-6 h-6 text-gray-400" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"
                ></path>
              </svg>
              <span class="hidden text-sm md:block">View on Github</span>
            </a>
          </div> -->
        </footer>
      </div>

      <!-- Setting panel button -->
      <div>
        <button
          @click="isSettingsPanelOpen = true"
          class="fixed right-0 px-4 py-2 text-sm font-medium text-white uppercase transform rotate-90 translate-x-8 bg-gray-600 top-1/2 rounded-b-md"
        >
          Settings
        </button>
      </div>

      <!-- Settings panel -->
      <div
        x-show="isSettingsPanelOpen"
        @click.away="isSettingsPanelOpen = false"
        x-transition:enter="transition transform duration-300"
        x-transition:enter-start="translate-x-full opacity-30  ease-in"
        x-transition:enter-end="translate-x-0 opacity-100 ease-out"
        x-transition:leave="transition transform duration-300"
        x-transition:leave-start="translate-x-0 opacity-100 ease-out"
        x-transition:leave-end="translate-x-full opacity-0 ease-in"
        class="fixed inset-y-0 right-0 flex flex-col bg-white shadow-lg bg-opacity-20 w-80"
        style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"
      >
        <div class="flex items-center justify-between flex-shrink-0 p-2">
          <h6 class="p-2 text-lg">Settings</h6>
          <button @click="isSettingsPanelOpen = false" class="p-2 rounded-md focus:outline-none focus:ring">
            <svg
              class="w-6 h-6 text-gray-600"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex-1 max-h-full p-4 overflow-hidden hover:overflow-y-scroll">
          <span>Settings Content</span>
          <!-- Settings Panel Content ... -->
        </div>
      </div>
    </div>
</div>
@notifyJs
</body>
</html>