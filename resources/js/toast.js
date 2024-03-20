import { toast } from "wc-toast";

document.addEventListener("DOMContentLoaded", function () {
  const message = document.getElementById("toast");
  if (message?.value) {
    toast(message.value, {
      icon: { type: "error" },
      theme: { type: "light" },
    });
  }
});
