import Layout from './Layout';
import { BrowserRouter as Router, Routes, Route, useNavigate } from "react-router-dom";
import Login from './components/Login';
import Home from './components/Home';

function App() {
    const cookie = document.cookie.split(';').find(cookie => cookie.trim().startsWith('CookieLogged=')); // Get the cookie
    let authentified = false;
    //Bypass Login for dev purposes, might want to remove that later
    if (cookie === 'Minou') {
        console.log('Bypassing login');
        authentified = true;
        doReturn();
    }

    if (cookie) {
        const token = cookie.split('=')[1]; // Extract the token value
        console.log('CookieLogged found, value: ');
        console.log(token);
        console.log('End of CookieLogged value');

        fetch('http://10.0.22.24:8080/api/checkToken', {
        method: 'POST',
        body: JSON.stringify({ token: token }),
        headers: {
            'Content-Type': 'application/json'
        }
    }).then(response => {
        if (response.ok) {
            response.json().then(data => {
                if (data.success === true) {
                    console.log('Token is valid');
                    authentified = true;
                    console.log(authentified);
                    doReturn();

                } else {
                    console.log('Token is invalid');
                    return <Login />;
                }
            });
        }
    });
}
else {
    return <Login />;
}



console.log('Authentified');
function doReturn() {
return (

    <div className="App">
    <Router>
    <Layout>
    <Routes>
    <Route path="/" element={<Home />} />
    <Route path="/login" element={<Login />} />
    </Routes>
    </Layout>
    </Router>
    </div>
    )
}
}

export default App

