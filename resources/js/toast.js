import { toast } from "wc-toast";

document.addEventListener("DOMContentLoaded", function () {
  const message = document.getElementById("toast");
  if (message?.dataset.message) {
    toast(message.dataset.message, {
      icon: { type: "error" },
      theme: { type: "light" },
    });
  }
});
