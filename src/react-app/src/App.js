import logo from "./logo.svg";
import "./App.css";
import { useEffect, useState } from "react";

function App({ url }) {

  const [ data, setData ] = useState([]);

    useEffect(() => {
        const controller = new AbortController()
        const signal = controller.signal

        fetch(url, {
            signal,
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                "Content-Type": "application/json",
                Accept: "application/json",
            },
        }).then((response) => response.json())
        .then((data) => setData(data.data));

        return () => controller.abort();
    }, [url]);

    return (
        <div className="App">
            <header className="App-header">
                <img src={logo} className="App-logo" alt="logo" />
            </header>
            {data && data.map(function(line) {
              return <p>{line}</p>
            })}
        </div>
    );
}

export default App;
