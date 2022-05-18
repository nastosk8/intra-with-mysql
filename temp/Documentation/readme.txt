        volumeMounts:
        - name: webpagefiles
          mountPath: /var/www/html
      volumes:
      - name: webpagefiles
        configMap:
          name: webpagefiles