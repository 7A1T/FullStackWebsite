FROM node:20.4 AS build

WORKDIR /build
COPY package.json package.json
COPY package-lock.json package-lock.json
RUN npm ci
COPY public/ public
COPY src/ src
RUN npm run build
# use NGINX as server
FROM nginx:alpine
COPY --from=build /build/build/ /usr/share/nginx/html