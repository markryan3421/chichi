<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
           
        <style>
            body {
  background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(13,13,61,1) 45%, rgba(39,106,120,1) 100%);
color: rgb(159, 154, 154);
}
.tooltip {
  font-family: "Source Sans Pro", sans-serif;
  -webkit-font-smoothing: antialiased !important;
  -moz-osx-font-smoothing: grayscale !important;
  
}

.header-bar {
  background-color: #201c1c00;
}

.container--narrow {
  max-width: 732px;
}

.header-search-icon {
  position: relative;
  top: 3px;
}

.header-chat-icon {
  cursor: pointer;
  position: relative;
  top: 3px;
}


footer.border-top {
  border-top: none !important;
  background-color: transparent !important;
}

footer.border-top p {
  color: rgb(159, 154, 154);
}

footer.border-top a.text-muted {
  color: #4ECDC4 !important;
  transition: color 0.3s ease;
}

footer.border-top a.text-muted:hover {
  color: #45b8b0 !important;
  text-decoration: none;
}
.avatar-small {
  width: 32px;
  height: 32px;
  border-radius: 16px;
  margin-right: 5px;
  position: relative;
  top: -3px;
}

.avatar-tiny {
  width: 24px;
  height: 24px;
  border-radius: 12px;
  margin-right: 4px;
  position: relative;
  top: -1px;
}

.form-control-title {
  font-size: 2rem;
  font-weight: 500;
}

.body-content {
  font-size: 1.2rem;
  line-height: 1.75;
  color: #292929;
}

.body-content p,
.body-content ul,
.body-content ol {
  margin-bottom: 1.75rem;
}

/* .input-dark {
  background-color: #444;
  border-color: transparent;
  color: #ffffff;
}

.input-dark:focus {
  color: #ffffff;
  background-color: #555;
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.input-dark::-webkit-input-placeholder {
  color: #888;
}
.input-dark::-moz-placeholder {
  color: #888;
}
.input-dark:-ms-input-placeholder {
  color: #888;
}
.input-dark:-moz-placeholder {
  color: #888;
} */

@media (min-width: 768px) {
  .input-dark {
    width: auto;
  }
}

.display-3 {
  font-size: 4.35rem;
}

@media (max-width: 768px) {
  .display-3 {
    font-size: 2.5rem;
  }
}

.form-group {
  position: relative;
}

.liveValidateMessage {
  transition: all 0.5s ease-out;
  top: -6px;
  position: absolute;
  z-index: 1;
  padding-top: 6px;
  padding-bottom: 16px;
  opacity: 0;
  transform: translateY(100%);
}

.liveValidateMessage--visible {
  opacity: 1;
  transform: translateY(0);
}

.form-group input,
.form-group textarea {
  position: relative;
  z-index: 2;
}

textarea.tall-textarea {
  height: 160px;
}

@media (min-width: 768px) {
  textarea.tall-textarea {
    height: 320px;
  }
}

.delete-post-button {
  cursor: pointer;
  background: none;
  border: none;
  padding: 0;
  margin: 0;
}

/* Search Overaly */
.search-overlay {
  display: flex;
  flex-direction: column;
  position: fixed;
  z-index: 500;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background-color: rgba(215, 215, 215, 0.911);
  visibility: hidden;
  opacity: 0;
  transform: scale(1.3);
  transition: 0.33s visibility ease-in-out, 0.33s opacity ease-in-out, 0.33s transform ease-in-out;
  will-change: visibility, transform, opacity;
}

.search-overlay--visible {
  visibility: visible;
  opacity: 1;
  transform: scale(1);
}

.search-overlay-icon {
  color: #4ECDC4;
  font-size: 1.4rem;
  margin: 0;
  margin-right: 10px;
}

.live-search-field {
  background-color: transparent;
  border: none;
  font-size: 1.1rem;
  outline: none;
  flex: 1;
  color: #4ECDC4;
}

.live-search-results {
  opacity: 0;
  transition: all 0.3s ease-out;
  transform: scale(1.07);
}

.live-search-results--visible {
  opacity: 1;
  transform: scale(1);
}

.search-overlay-top {
  background-color: #fff;
  /* background-color: rgba(0, 0, 0, .79); */
}

.search-overlay-top .container {
  position: relative;
  display: flex;
  align-items: center;
  padding-top: 15px;
  padding-bottom: 15px;
}

.search-overlay-bottom {
  overflow: auto;
}

.close-live-search {
  font-size: 1.5rem;
  cursor: pointer;
  opacity: 0.75;
  line-height: 1;
  color: #292929;
}

@media (min-width: 700px) {
  .live-search-field {
    font-size: 2.5rem;
  }

  .close-live-search {
    font-size: 3rem;
  }

  .search-overlay-icon {
    font-size: 3rem;
  }
}

.close-live-search:hover {
  opacity: 1;
}

@-webkit-keyframes spin {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spin {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

.circle-loader {
  opacity: 0;
  transition: opacity 0.45s ease-out, visibility 0.45s ease-out;
  visibility: hidden;
  position: absolute;
  left: 50%;
  box-sizing: border-box;
  width: 65px;
  height: 65px;
  border-radius: 100%;
  border: 10px solid rgba(73, 80, 87, 0.2);
  border-top-color: #495057;
  will-change: -webkit-transform, transform;
  -webkit-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-animation: spin 1s infinite linear;
  animation: spin 1s infinite linear;
}

.circle-loader--visible {
  visibility: visible;
  opacity: 1;
}

/* End Search Overlay */

/* Chat */
.chat-wrapper {
  position: fixed;
  z-index: 5;
  bottom: 0;
  right: 20px;
  width: 290px;
  height: 350px;
  background-color: #fff;
  display: flex;
  flex-direction: column;
  opacity: 0;
  transform: translateY(100%);
}

.chat-wrapper--ready {
  transition: all 0.4s ease-in-out;
}

.chat--visible {
  opacity: 1;
  transform: translateY(0);
}

.chat-title-bar {
  background-color: #292929;
  color: #fff;
  padding: 4px 7px;
  display: flex;
  justify-content: space-between;
}

.chat-title-bar-close {
  opacity: 0.7;
  cursor: pointer;
}

.chat-title-bar-close:hover {
  opacity: 1;
}

.chat-log {
  padding: 8px;
  flex: 1;
  overflow: auto;
}

.chat-self,
.chat-other {
  font-size: 0.75rem;
  display: flex;
  align-items: center;
  margin-bottom: 7px;
}

.chat-self {
  padding-left: 25%;
}

.chat-self .chat-avatar {
  margin-left: 6px;
}

.chat-self .chat-message {
  flex: 1;
  display: flex;
  justify-content: flex-end;
}

.chat-self .chat-message-inner {
  text-align: right;
  padding: 4px 7px;
  border-radius: 12px;
  background-color: #4ECDC4;
  color: #fff;
}

.chat-other {
  padding-right: 25%;
}

.chat-other .chat-avatar {
  margin-right: 6px;
}

.chat-other .chat-message {
  flex: 1;
  display: flex;
  justify-content: flex-start;
}

.chat-other .chat-message-inner {
  padding: 4px 7px;
  border-radius: 12px;
  background-color: #f1f0f0;
}

.chat-message a {
  color: #212529;
}

.chat-field {
  width: 100%;
  box-sizing: border-box;
  padding: 10px 7px;
  border: none;
  outline: none;
  font-size: 0.75rem;
}

header .flex-row > div {
    display: inline;
}

header .flex-row > div > div {
    display: inline;
}

.btn-primary {
  background-color: #ffffff; 
  border-color: #ffffff;
  color: #000;
  border-radius: 30px; 
}

.btn-primary:hover {
  background-color: #a4a4a2;
  border-color: #a4a4a2;
  border-radius: 30px;
}

.btn-success {
  background-color: #4ECDC4;
  border-color: #45b8b0;
  color: white;
  border-radius: 30px;
  padding: 6px 12px;/* Changed to more default padding */
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(78, 205, 196, 0.2);
  font-size: 1rem; /* Added default font size */
}

.btn-success:hover {
  background-color: #45b8b0;
  border-color: #3da49d;
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(78, 205, 196, 0.3);
}

.btn-success:active {
  transform: translateY(0);
  box-shadow: 0 2px 10px rgba(78, 205, 196, 0.2);
}

.btn-secondary {
  border-radius: 30px;
  padding: 6px 12px;
  font-size: 0.875rem;
  line-height: 1.5;
  transition: all 0.3s ease;
}

.btn-secondary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(108, 117, 125, 0.3);
}

.btn-secondary:active {
  transform: translateY(0);
  box-shadow: 0 2px 10px rgba(108, 117, 125, 0.2);
}

.bubble-container {
  position: relative;
  min-height: 300px;
  overflow: hidden;
}

.bubble {
  position: absolute;
  background: linear-gradient(
    to right,
    rgba(255, 255, 255, 0.4),
    rgba(173, 216, 230, 0.6)
  );
  border-radius: 50%;
  box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
  animation: float 7s ease-in infinite;
}

/* diri nadi mag butang bubble kag iya mga sizes*/
.bubble-1 {
  width: 20px;
  height: 20px;
  left: 10%;
  animation-delay: 0s;
}

.bubble-2 {
  width: 15px;
  height: 15px;
  left: 25%;
  animation-delay: 2s;
}

.bubble-3 {
  width: 25px;
  height: 25px;
  left: 40%;
  animation-delay: 4s;
}

.bubble-4 {
  width: 12px;
  height: 12px;
  left: 60%;
  animation-delay: 1s;
}

.bubble-5 {
  width: 18px;
  height: 18px;
  left: 75%;
  animation-delay: 3s;
}

.bubble-6 {
  width: 14px;
  height: 14px;
  left: 90%;
  animation-delay: 2.5s;
}

.bubble-7 {
  width: 16px;
  height: 16px;
  left: 15%;
  animation-delay: 5s;
}

.bubble-8 {
  width: 22px;
  height: 22px;
  left: 85%;
  animation-delay: 1.5s;
}

@keyframes float {
  0% {
    bottom: -20px;
    opacity: 0;
  }
  20% {
    opacity: 0.8;
  }
  40% {
    opacity: 0.6;
  }
  80% {
    opacity: 0.3;
  }
  100% {
    bottom: 100%;
    opacity: 0;
  }
}
            </style>
            
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        @yield('content')
    </body>
</html>
