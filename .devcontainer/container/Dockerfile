FROM mcr.microsoft.com/devcontainers/base:bookworm

RUN apt-get update && \
  apt-get install -y python3-venv fping rrdtool snmp \
    php-cli php-curl php-gd php-mbstring php-mysql php-xml php-zip && \
  apt-get clean && \
  rm -rf /tmp/* /var/lib/apt/lists/* /var/tmp/*
