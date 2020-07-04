<?php

    session_start(); // inicializa a sessão;
    session_unset(); // limpa as variveis de sessão;
    session_destroy(); // destroi a sessão;

    echo("<script>alert('Você foi desconectado!'); document.location.href='../index.html';</script>");