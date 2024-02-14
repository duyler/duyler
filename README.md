# Duyler
### Event-driven architecture framework

### Get started

#### Install with included docker config and without host php interpreter

```shell
curl -L -O https://github.com/duyler/duyler/archive/refs/heads/master.zip | unzip master.zip -d duyler
```
```shell
cd duyler
```
```shell
make build
make up
```

#### Install using local composer

```shell
composer create-project duyler/duyler
```
```shell
cd duyler
```
```shell
make up
```
Open http://localhost/
