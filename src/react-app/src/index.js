import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';

const rootElement = document.getElementById('root');

let url = 'http://localhost:8765/react/api';

if(process.env.NODE_ENV === "production") {
  url = rootElement.getAttribute('data-url');
}

const root = ReactDOM.createRoot(rootElement);
root.render(
  <React.StrictMode>
    <App url={url} />
  </React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
