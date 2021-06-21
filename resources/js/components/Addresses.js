import React from 'react';
import ReactDOM from 'react-dom';

function Addresses() {
    const [title, setTitle] = useState("Adresses")
    const [show, setShow] = useState(false);
    // const [address,setAddress] = useState("");
    // const [address2,setAddress2] = useState("");
    // const [city, setCity] = useState("");
    // const [zip_code, setZipCode] = useState("");

    function handlClickShow() {
        setShow(!show);
    }



    return (
        <div className="Addresses">
            <h1> {title} </h1>
            <button name="show" 
                onClick={handleClickShow}
            >Séléctionner</button>
            {show ? route(addresses.show,'id') : error404 }
        </div>
    );
}
const el = <h1>Adresses :</h1>
ReactDOM.render(el,document.getElementById('root'));
// import axios from 'axios'
// import React, { Component } from 'react'
// import { Link } from 'react-router-dom'

// class Addresses extends Component {
//     constructor () {
//         super()
//         this.state = {
//             addresses: []
//         }
//     }

//     componentDidMount() {
//         axios.get
//     }
// }