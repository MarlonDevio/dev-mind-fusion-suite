import { StrictMode } from "react";
import { createRoot } from "react-dom/client";
import App from "./App.tsx";
import "./index.css";

document.addEventListener("DOMContentLoaded", () => {
  createRoot(document.getElementById("wpbody")!).render(
    <StrictMode>
      <App />
    </StrictMode>,
  );
});
