
import React from 'react'
import { Link } from 'react-router-dom'

const Header = () => (
    <nav className='navbar navbar-expand-md navbar-light navbar-laravel'>
    <div className='container'>
        <Link className='navbar-brand' to='route(accueil)'>Accueil</Link>
        <Link className='navbar-brand' to='route(roles.index)'>Role</Link>
        <Link className='navbar-brand' to='route(addresses.index)'>Adresse</Link>
    </div>
    </nav>
)

export default Header