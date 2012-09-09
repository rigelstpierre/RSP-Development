Rigelstpierre::Application.routes.draw do
  root :to => 'home#index'

  resources :portfolios
  resources :pages

  match ":id" => 'pages#show'
end
