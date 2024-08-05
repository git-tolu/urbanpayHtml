<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
 $dbpass = '';
 $dbname = 'urbanpay';
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  if (isset($_POST['waitlistBtn'])) {
    # code...
    $email = $_POST['email'];
    $user_id = rand(100, 10000000);
    $sql = 'INSERT INTO waitlist (user_id, email) VALUES ("$user_id", "$email")';
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo'
      <div class="flex justify-end items-end text-end w-full mt-2">
        <div id="toast-success" class="flex items-center w-25  p-4 mb-4 text-gray-500 bg-white rounded-lg shadow " role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
              </svg>
              <span class="sr-only">Check icon</span>
          </div>
          <div class="ms-3 text-lg font-bold">Added successfully to waitlist.</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
          </div>
        </div>
      </div>

      ';





    }
  }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UrbanPay</title>
    <!-- <link rel="stylesheet" href="index.css" type="text/css" /> -->
    <link rel="stylesheet" href="../assets/bootstrap5.2/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/custom/css/style.css" />
    <!-- <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"
      rel="stylesheet"
    /> -->
    <link rel="stylesheet" href="../assets/tailwind/tailwind.css" />
    <link
      rel="shortcut icon"
      href="../assets/img/URBAN PAY LOGO PNG.png"
      type="image/x-icon"
    />
  </head>
  <body style="background-color: #f6f6f6">
    <nav class="bg-transparent border-gray-200 dark:bg-gray-900">
      <div class="container">
        <div class="d-flex justify-content-between mx-auto pt-2 space-x-10">
          <a href="https://flowbite.com/" class="flex items-center">
            <img
              src="../assets/img/URBAN PAY LOGO PNG.png"
              class="h-8"
              alt="Flowbite Logo"
            />
            <span
              class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"
              >URBANPAY</span
            >
          </a>
          <div class="w-full flex justify-end text-end items-end">
            <ul
              class="font-medium flex md:p-0 rounded-lg md:space-x-8 md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
            >
              <li>
                <a
                  href="#"
                  class="block py-2 px-3 text-white rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                  aria-current="page"
                  ><svg
                    width="20"
                    height="20"
                    viewBox="0 0 20 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M20 10.0607C20 4.50389 15.5225 -0.000793457 9.99937 -0.000793457C4.47619 -0.000793457 -0.0012207 4.50389 -0.0012207 10.0607C-0.0012207 15.0827 3.65585 19.2452 8.43677 20V12.9691H5.89756V10.0607H8.43677V7.84404C8.43677 5.32237 9.92979 3.92948 12.2141 3.92948C13.3083 3.92948 14.4528 4.126 14.4528 4.126V6.60207H13.1917C11.9494 6.60207 11.562 7.37765 11.562 8.17334V10.0607H14.3356L13.8922 12.9691H11.562V20C16.3429 19.2452 20 15.0827 20 10.0607Z"
                      fill="#585757"
                    />
                  </svg>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                  ><svg
                    width="20"
                    height="20"
                    viewBox="0 0 20 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.0009 0C7.28508 0 6.94424 0.0118753 5.87756 0.0604175C4.81297 0.109168 4.08629 0.277711 3.45045 0.525006C2.79274 0.780425 2.23481 1.1221 1.67898 1.67814C1.12272 2.23398 0.78105 2.7919 0.524797 3.44941C0.276878 4.08546 0.108126 4.81234 0.0602089 5.87652C0.0125 6.9432 0 7.28424 0 10.0001C0 12.716 0.0120837 13.0558 0.0604175 14.1224C0.109376 15.187 0.27792 15.9137 0.525006 16.5495C0.780633 17.2073 1.1223 17.7652 1.67835 18.321C2.23398 18.8773 2.7919 19.2198 3.4492 19.4752C4.08546 19.7225 4.81234 19.891 5.87673 19.9398C6.94341 19.9883 7.28403 20.0002 9.99969 20.0002C12.7158 20.0002 13.0556 19.9883 14.1222 19.9398C15.1868 19.891 15.9143 19.7225 16.5506 19.4752C17.2081 19.2198 17.7652 18.8773 18.3208 18.321C18.8771 17.7652 19.2187 17.2073 19.475 16.5498C19.7208 15.9137 19.8896 15.1868 19.9396 14.1226C19.9875 13.056 20 12.716 20 10.0001C20 7.28424 19.9875 6.94341 19.9396 5.87673C19.8896 4.81213 19.7208 4.08546 19.475 3.44962C19.2187 2.7919 18.8771 2.23398 18.3208 1.67814C17.7646 1.12189 17.2083 0.780217 16.55 0.525006C15.9125 0.277711 15.1854 0.109168 14.1208 0.0604175C13.0541 0.0118753 12.7145 0 9.99781 0H10.0009ZM9.10385 1.8021C9.3701 1.80169 9.66718 1.8021 10.0009 1.8021C12.671 1.8021 12.9874 1.81169 14.0418 1.8596C15.0168 1.90419 15.546 2.0671 15.8985 2.20398C16.3652 2.38523 16.6979 2.6019 17.0477 2.95191C17.3977 3.30191 17.6143 3.63525 17.796 4.10192C17.9329 4.454 18.096 4.98318 18.1404 5.95819C18.1883 7.01236 18.1987 7.32903 18.1987 9.99781C18.1987 12.6666 18.1883 12.9833 18.1404 14.0374C18.0958 15.0124 17.9329 15.5416 17.796 15.8937C17.6148 16.3604 17.3977 16.6927 17.0477 17.0425C16.6977 17.3925 16.3654 17.6091 15.8985 17.7904C15.5464 17.9279 15.0168 18.0904 14.0418 18.135C12.9876 18.1829 12.671 18.1933 10.0009 18.1933C7.3307 18.1933 7.01424 18.1829 5.96006 18.135C4.98505 18.09 4.45588 17.9271 4.10317 17.7902C3.6365 17.6089 3.30316 17.3923 2.95316 17.0423C2.60315 16.6923 2.38648 16.3598 2.20481 15.8929C2.06794 15.5408 1.90481 15.0116 1.86044 14.0366C1.81252 12.9824 1.80294 12.6658 1.80294 9.99531C1.80294 7.32487 1.81252 7.00987 1.86044 5.95569C1.90502 4.98068 2.06794 4.4515 2.20481 4.099C2.38607 3.63233 2.60315 3.29899 2.95316 2.94899C3.30316 2.59899 3.6365 2.38232 4.10317 2.20065C4.45567 2.06315 4.98505 1.90065 5.96006 1.85585C6.88257 1.81419 7.24008 1.80169 9.10385 1.7996V1.8021ZM15.3389 3.46254C14.6764 3.46254 14.1389 3.99942 14.1389 4.66213C14.1389 5.32464 14.6764 5.86214 15.3389 5.86214C16.0014 5.86214 16.5389 5.32464 16.5389 4.66213C16.5389 3.99962 16.0014 3.46212 15.3389 3.46212V3.46254ZM10.0009 4.86463C7.16487 4.86463 4.86547 7.16403 4.86547 10.0001C4.86547 12.8362 7.16487 15.1345 10.0009 15.1345C12.837 15.1345 15.1356 12.8362 15.1356 10.0001C15.1356 7.16403 12.8368 4.86463 10.0007 4.86463H10.0009ZM10.0009 6.66674C11.8418 6.66674 13.3343 8.15904 13.3343 10.0001C13.3343 11.841 11.8418 13.3335 10.0009 13.3335C8.15988 13.3335 6.66757 11.841 6.66757 10.0001C6.66757 8.15904 8.15988 6.66674 10.0009 6.66674V6.66674Z"
                      fill="#585757"
                    />
                  </svg>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                  ><svg
                    width="20"
                    height="17"
                    viewBox="0 0 20 17"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.28251 16.75C13.8295 16.75 17.9592 10.4963 17.9592 5.08231C17.9592 4.90637 17.9592 4.73044 17.9512 4.5545C18.7515 3.97872 19.4478 3.25098 20 2.42729C19.2637 2.75517 18.4714 2.97109 17.6391 3.07505C18.4874 2.57124 19.1357 1.76353 19.4478 0.803887C18.6555 1.27571 17.7751 1.61159 16.8387 1.79552C16.0864 0.995817 15.022 0.5 13.8455 0.5C11.5806 0.5 9.7399 2.33932 9.7399 4.60248C9.7399 4.92237 9.77991 5.23425 9.84394 5.53814C6.43457 5.3702 3.40936 3.73081 1.38455 1.25172C1.03241 1.8595 0.832333 2.56324 0.832333 3.31496C0.832333 4.73843 1.56062 5.99397 2.65706 6.7297C1.98479 6.70571 1.35254 6.52178 0.80032 6.21789C0.80032 6.23388 0.80032 6.24988 0.80032 6.27387C0.80032 8.25714 2.21689 9.92052 4.08964 10.2964C3.7455 10.3923 3.38535 10.4403 3.0092 10.4403C2.7451 10.4403 2.489 10.4163 2.2409 10.3684C2.7611 11.9998 4.28171 13.1833 6.07443 13.2153C4.66587 14.3189 2.89716 14.9747 0.976391 14.9747C0.64826 14.9747 0.320128 14.9587 0 14.9187C1.80872 16.0703 3.96959 16.75 6.28251 16.75Z"
                      fill="#585757"
                    />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="container" style="height: 90vh">
      <div
        class="flex justify-center items-center text-center"
        style="height: 100%"
      >
        <div class="">
          <div class="mb-10 justify-center text-center items-center">
            <h2 class="font-bold md:text-4xl mt-12 text-capitalize text-center">
              Borderless Payment Built <br />For Africans
            </h2>
            <p
              class="text-gray-400 md:text-sm text-capitalize my-3 text-center"
            >
              Giving you access to Send and Recieve Money Globally with access
              to create Debit card and more goodies
            </p>
          </div>

          <form class="mt-14" method="post" id="waitlist">
            <div class="row">
              <div class="col-md-8 mt-2">
                <input
                  type="email"
                  id="email"
                  name="email"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 py-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Enter your Email Address here"
                  required
                />
              </div>
              <div class="col-md-4 mt-2">
                <button
                  type="submit"
                  id="waitlistBtn"
                  name="waitlistBtn"
                  class="text-white custom-bg focus:ring-4 focus:ring-blue-300 font-small rounded text-xs p-1 py-3 me-2 mb-2 w-75 focus:outline-none dark:focus:ring-blue-800"
                >
                  Get Early Access
                </button>
              </div>
            </div>
          </form>
          <div
            class="flex justify-center text-center items-center"
            style="margin-top: 20%"
          >
            <p class="text-gray-400 text-sm text-center">
              Copyright 2022 UrbanPay. All Right Reserved.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal trigger button -->
    <!-- <button
  type="button"
  class="btn btn-primary btn-lg"
  data-bs-toggle="modal"
  data-bs-target="#modalId"
>
  Launch
</button> -->

    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div
      class="modal fade"
      id="modalId"
      tabindex="-1"
      role="dialog"
      aria-labelledby="modalTitleId"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md"
        role="document"
      >
        <div class="modal-content">
          <div class="modal-header border-0">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body p-5">
            <h1 class="text-4xl font-bold text-center">
              Invite your friends to Join the list!
            </h1>
            <p class="text-center my-2">
              Thanks for joining our waitlist, you are now party of those get
              early access to use our product before we launch fully.
            </p>
            <p class="custom-color font-extrabold text-center text-4xl my-2">
              bank
            </p>
            <p class="text-center">
              Copy & Share link below with your friends.
            </p>
            <div id="linkContainer" class="border  p-2 my-2 rounded-full flex justify-between space-x-5">
              <input
                type="text"
                value="https://urbanpay.com"
                id="linkInput"
                readonly
                class="w-full"
              />

              <button onclick="copyLink()" class="w-full text-white custom-bg focus:ring-4 focus:ring-blue-300 font-small rounded-full text-xs p-1 py-3 me-2 mb-2 w-75 focus:outline-none dark:focus:ring-blue-800">Copy Link</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional: Place to the bottom of scripts -->

    <script src="../assets/bootstrap5.2/jquery.min.js"></script>
    <script src="../assets/bootstrap5.2/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    <script>
      const myModal = new bootstrap.Modal(document.getElementById("modalId"));
      myModal.show();
      function copyLink() {
        // Get the input element containing the link
        var linkInput = document.getElementById("linkInput");

        // Select the text in the input element
        linkInput.select();
        linkInput.setSelectionRange(0, 99999); /* For mobile devices */

        // Copy the selected text to the clipboard
        document.execCommand("copy");

        // Alert the user
        alert("Link copied to clipboard: " + linkInput.value);
      }
      // $('#waitlistBtn').click(function (e) { 
      //   e.preventDefault();
      //   $.ajax({
      //     type: "post",
      //     url: "index.php",
      //     data: $("#waitlist").serialize() + '&action=waitlist' ,
      //     success: function (response) {
      //       console.log
      //     }
      //   });
      // });
    </script>
  </body>
</html>
