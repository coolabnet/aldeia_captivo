# aldeia_captivo
Template do portal captivo de Aldeia Velha

---------------------------------------
Para permitir a listagem dos arquivos do servidor, é necessário acrescentar essas linhas no /etc/nginx/sites-available/default (caso esse seja seu site). A localização das pastas é relativa à home page do site, ou seja, se o site estiver rodando na raiz do servidor (/) a localização seria /textos/ ao invés de /biblioteca/textos/ 

        location  /biblioteca/textos/ {
               autoindex on;
        }
        location  /biblioteca/videos/ {
               autoindex on;
        }
        location /biblioteca/musicas/ {
               autoindex on;
        }
        location /biblioteca/fotos/ {
               autoindex on;
        }

