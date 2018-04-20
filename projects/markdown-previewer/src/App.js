import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import Footer from "./footer/Footer";
import Header from "./header/Header"
import Container from "./markdown/markdown.js";

class App extends Component {
  render() {
    return [
      <div key="header" className="stickyFooter">
        <Header />
        <Container />
      </div>,
      <Footer key="footer"/>
    ];
  }
}

export default App;
