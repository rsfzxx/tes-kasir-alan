//import React
import React from 'react';

//import Link
import { Link } from '@inertiajs/inertia-react';

//import CSS
import './Default.css';

//bootstrap
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap-icons/font/bootstrap-icons.css';

function Layout({ children }) {

    return (
        <>
        <div className="background">
            <header>
                <nav className="navbar m navbar-expand-lg navbar-dark fixed-top bg-info">
                    <div className="container">
                        <Link className="navbar-brand mb-0 h3" href="/">Alan Resto</Link>
                    </div>
                </nav>
            </header>

            <div style={{ marginTop: '50px' }}>
            <nav class="navbar-h-100 navbar-expand-sm navbar-light">
                        <div className="container">
                            <ul className="navbar-nav me-auto mb-2 mb-lg-0">
                                <li className="nav-item">
                                    <Link className="nav-link active text-dark px-4 mx-2 h2" href="/posts/"><div class="text"> Food </div></Link>
                                </li>
                                <li className="nav-item">
                                    <a className="nav-link active text-dark h2" href="/"><div class="text">Transaksi</div></a>
                                </li>
                            </ul>
                        </div>
	</nav>
    </div>
            <main className="container mt-5">
                { children }
            </main>
            </div>
        </>
    )

}

export default Layout
