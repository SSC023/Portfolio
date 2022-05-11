import React from 'react';
import data from './data';
function App() {
  return (
    <div className="grid-container">
            <header className="row">
                <div>
                    <a className="brand" href="/">Otra Vida</a>
                </div>
                <div>
                    <a href="/cart">Cart</a>
                    <a href="/signin">Sign In</a>
                </div>
            </header>
            <main>
                <div className="row center">
                  {
                    data.products.map( product => <div key={product._id}className="card">
                    <a href={`/product/${product._id}`}>
                        <img classNameName="medium" src={product.image} alt={product.name}></img>
                    </a>
                    <div classNameName="card-body">
                        <a href={`/product/${product._id}`}>
                            <h2>{product.name}</h2>
                        </a>
                        <p className="details">Detalles:</p>
                    </div>
                    <div className="price">
                        {product.price}
                    </div>     
                </div>
            )
                  }
            </div>        
            </main>
            <footer className="row center">
                All rights reserved
            </footer>
        </div>


  );
}

export default App;
